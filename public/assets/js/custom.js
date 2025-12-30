/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */

         // Employee ID
        const maskemployeeIDElement = document.querySelector('#mask_employeeID');
        if(maskemployeeIDElement) {
            const maskEmployeeID = IMask(maskemployeeIDElement, {
                mask: '0000000000'
            });
        }



const swalInit = swal.mixin({
    buttonsStyling: false,
    customClass: {
        confirmButton: 'btn btn-primary',
        cancelButton: 'btn btn-light',
        denyButton: 'btn btn-light',
        input: 'form-control',
        popup: 'custom-width'
    },
});

$.extend($.fn.dataTable.defaults, {
    autoWidth: false,
    columnDefs: [{ 
        orderable: false,
        width: 100
    }],
    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
    language: {
        search: '<span class="me-3">Filter:</span> <div class="form-control-feedback form-control-feedback-end flex-fill">_INPUT_<div class="form-control-feedback-icon"><i class="ph-magnifying-glass opacity-50"></i></div></div>',
        searchPlaceholder: 'Type to filter...',
        lengthMenu: '<span class="me-3">Show:</span> _MENU_',
        paginate: { 'first': 'First', 'last': 'Last', 'next': document.dir == "rtl" ? '&larr;' : '&rarr;', 'previous': document.dir == "rtl" ? '&rarr;' : '&larr;' }
    }
});

$(document).ready(function() {
    const counters = document.querySelectorAll('.countAnimation');
    const speed = 200;
    const formatNumber = (num) => {
        return new Intl.NumberFormat().format(num);
    };

    counters.forEach(counter => {
        const animate = () => {
            const value = +counter.getAttribute("data-value");
            const data = +counter.innerText.replace(/,/g, ''); 

            const time = value / speed;
            if (data < value) {
                counter.innerText = formatNumber(Math.ceil(data + time));
                setTimeout(animate, 1);
            } else {
                counter.innerText = formatNumber(value);
            }
        };
        animate();
    });
});



$(document).ready(function () {
    $(document).on('change', '#province', function () {
        var provCode = $(this).val();
		console.log(provCode);
        $('#cityMun').html('<option value="">Loading...</option>');
        $('#barangay').html('<option value="">Select Barangay</option>');

        $.post('../ajax/addressHandler.php', {
            action: 'getCities',
            provCode: provCode
        }, function (data) {
            $('#cityMun').html('<option value="">Select City/Municipality</option>');
            $.each(data, function (index, city) {
                $('#cityMun').append('<option value="' + city.citymunCode + '">' + city.txtCityMunDesc + '</option>');
            });
        }, 'json');
    });

    $('#cityMun').on('change', function () {
        var cityMunCode = $(this).val();
        $('#barangay').html('<option value="">Loading...</option>');

        $.post('../ajax/addressHandler.php', {
            action: 'getBarangays',
            cityMunCode: cityMunCode
        }, function (data) {
            $('#barangay').html('<option value="">Select Barangay</option>');
            $.each(data, function (index, brgy) {
                $('#barangay').append('<option value="' + brgy.intBrgyID + '">' + brgy.txtBrgyDesc + '</option>');
            });
        }, 'json');
    });
});