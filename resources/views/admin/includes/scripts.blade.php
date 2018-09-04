<script src="{{asset('js/app.js')}}"></script>
<script src="{{ asset ('/assets/js/jquery.js') }}"></script>
<script src="{{ asset ('/assets/js/bootstrap.min.js') }}"></script>
{{--<script src="{{ asset ('/assets/js/wow.min.js') }}"></script>--}}
{{--<script src="{{ asset ('/assets/js/morris.min.js') }}"></script>--}}
{{--<script src="{{ asset ('/assets/js/bootstrap-tagsinput.min.js') }}"></script>--}}
<script src="{{ asset ('/assets/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset ('/assets/js/metisMenu.min.js') }}"></script>
{{--<script src="{{ asset ('/assets/js/bootstrap-imageupload.js') }}"></script>--}}
{{--<script src="{{ asset ('/assets/js/select2.min.js') }}"></script>--}}
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>


<script>
    $(document).ready(function() {

        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
        $('#postSummer').summernote({
            height: '200'
        })
        $('.dropdown-toggle').dropdown()
    });
</script>

<script src="{{ asset ('/assets/js/jquery.app.js') }}"></script>