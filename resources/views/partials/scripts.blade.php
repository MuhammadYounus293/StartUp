  <!-- General JS Scripts -->
  <script src="{{ asset('assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('assets/bundles/amcharts4/core.js')}}"></script>
  <script src="{{ asset('assets/bundles/amcharts4/charts.js')}}"></script>
  <script src="{{ asset('assets/bundles/amcharts4/animated.js')}}"></script>
  <script src="{{ asset('assets/bundles/summernote/summernote-bs4.js')}}"></script>
  <script src="{{ asset('assets/bundles/codemirror/lib/codemirror.js')}}"></script>
  <script src="{{ asset('assets/bundles/codemirror/mode/javascript/javascript.js')}}"></script>
  <script src="{{ asset('assets/bundles/jquery-selectric/jquery.selectric.min.js')}}"></script>
  <script src="{{ asset('assets/bundles/ckeditor/ckeditor.js')}}"></script>
  <script src="{{ asset('assets/bundles/datatables/datatables.min.js')}}"></script>
  <script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{ asset('assets/bundles/sweetalert/sweetalert.min.js')}}"></script>
  <script src="{{ asset('assets/bundles/izitoast/js/iziToast.min.js')}}"></script>
  <script src="{{ asset('assets/js/page/note.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/js/page/index2.js')}}"></script>
  <script src="{{ asset('assets/js/page/datatables.js')}}"></script>
  <script src="{{ asset('assets/js/page/toastr.js')}}"></script>
  <script src="{{ asset('assets/js/page/ckeditor.js')}}"></script>
  <script src="{{ asset('assets/js/scripts.js')}}"></script>
  <script src="{{ asset('assets/js/custom.js')}}"></script>
  <script src="{{ asset('assets/js/page/sweetalert.js')}}"></script>

  <script src="{{ asset('assets/bundles/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/js/page/gallery1.js')}}"></script>

  <script src="{{ asset('assets/js/page/forms-advanced-forms.js')}}"></script>
  <script src="{{ asset('assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
  


  <script>
      function isNumberKey(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode;
          if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
              return iziToast.warning({
                  title: "Error!",
                  message: "Error only digit allowed!",
                  position: "topRight",
              });
          } else {
              return true;
          }
      }
  </script>