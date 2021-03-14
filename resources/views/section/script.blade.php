<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js" defer></script>	
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" defer></script>
<script src="{{ asset('js/jquery.loadingModal.js') }}" defer></script>
<script>
	function showmodal(text)
        {
            $('body').loadingModal({
                position:'auto',
                text:text,
                color:'#fff',
                opacity:'0.7',
                backgroundColor:'rgb(0,0,0)',
                animation:'foldingCube'
            });
        }
       
        function hidemodal()
        {
            $('body').loadingModal('destroy');
        }
</script>