@include('flashy::message')
{!! Html::script('js/app.js') !!}
{!! Html::script('js/ace-extra.min.js') !!}
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<!-- page specific plugin scripts -->
<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<!-- ace scripts -->
{!! Html::script('js/ace-elements.min.js') !!}
{!! Html::script('js/ace.min.js') !!}
{!! Html::script('js/script.js') !!}
{!! Html::script('js/jquery.dataTables.min.js') !!}
{!! Html::script('js/jquery.dataTables.bootstrap.min.js') !!}
<script src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
{!! Html::script('js/vfs_fonts.js') !!}
<script src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>
@yield('scripts')
@yield('extra_scripts')