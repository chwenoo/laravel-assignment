
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
<script src="{{ asset('vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('js/demo/chart-area-demo.js')}}"></script>
<script src="{{ asset('js/demo/chart-pie-demo.js')}}"></script>

<!-- Bootstrap-select CDN JS LINK -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.12/dist/js/bootstrap-select.min.js"></script>

<!-- Bootstrap-Select Custom JS LINK-->
<script type="text/javascript">
    $('.selectpicker').on('changed.bs.select', function (e, clickedIndex, isSelected, previousValue) {
        if(e.target.options[clickedIndex].selected){
            console.log(e.target.options[clickedIndex].value);
        }
    });
</script>
