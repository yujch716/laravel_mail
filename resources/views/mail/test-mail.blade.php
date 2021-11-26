{{-- MailController에서 만든 title, body variable --}}
{{--<h1>{{ $details['title'] }}</h1>--}}
{{--<p>{{ $details['body'] }}</p>--}}
@include('flash::message')
<script>
    $('#flash-overlay-modal').modal();
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>

와 성공
