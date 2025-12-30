<?php
class RateLimitModel extends BaseModel
{
    protected $table = 'tbl_rate_limit', $maxRequests = 100, $timeWindow = 3600;

    public function get($id)
    {
        $query = "SELECT * FROM $this->table WHERE rate_limit_id = ?";
        $params = ["i", $id];
        $result = $this->queryBuilder($query, $params);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAll()
    {
        $query = "SELECT * FROM $this->table";
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create($data)
    {
        extract($data);
        $query = "INSERT INTO $this->table (rate_limit_ip, rate_limit_request_time) VALUES (?, ?)";
        $params = ["ss", $rate_limit_ip, $rate_limit_request_time];
        $result = $this->queryBuilder($query, $params);
        return $result;
    }

    public function checkRateLimit($ip)
    {
        $currentTime = time();
        $query = "SELECT COUNT(*) AS request_count FROM $this->table WHERE rate_limit_ip = ? AND rate_limit_request_time > ?";
        $params = ["ss", $ip, $currentTime - $this->timeWindow];
        $result = $this->queryBuilder($query, $params);
        $x = $result->fetch_all(MYSQLI_ASSOC);

        if (isset($x['request_count']) && $x['request_count'] >= $this->maxRequests) {
            http_response_code(429);
            echo "You have exceeded the number of allowed requests. <br> ~ Kenji Security";
            exit();
        }

        return $this->create(["rate_limit_ip" => $ip, "rate_limit_request_time" => $currentTime]);
    }
}