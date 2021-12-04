 <!-- Bootstrap core JavaScript-->
 <script src="{{ asset('theme') }}/vendor/jquery/jquery.min.js"></script>
 <script src="{{ asset('theme') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="{{ asset('theme') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="{{ asset('theme') }}/js/sb-admin-2.min.js"></script>

 <!-- Page level plugins -->
 <!-- <script src="{{ asset('theme') }}/vendor/chart.js/Chart.min.js"></script> -->

 <!-- Page level custom scripts -->
 <!-- <script src="{{ asset('theme') }}/js/demo/chart-area-demo.js"></script>
    <script src="{{ asset('theme') }}/js/demo/chart-pie-demo.js"></script> -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js" defer></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" defer></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js" defer></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" defer></script>
 <script src="{{ asset('js/jquery.loadingModal.js') }}" defer></script>
 <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
 <script>
    function showmodal(text) {
       $('body').loadingModal({
          position: 'auto',
          text: text,
          color: '#fff',
          opacity: '0.7',
          backgroundColor: 'rgb(0,0,0)',
          animation: 'foldingCube'
       });
    }

    function hidemodal() {
       $('body').loadingModal('destroy');
    }
 </script>