@extends('layouts.main')
@section('content')
<h2>Hello Admin,</h2>
You received an email from : {{ $inquiries_fname }}
Here are the details:
<b>Name:</b> {{ $inquiries_fname }}
<b>Email:</b> {{ $inquiries_email }}
<b>Phone Number:</b> {{ $inquiries_phone }}
<b>Subject:</b> {{ $inquiries_subject }}
<b>Message:</b> {{ $extra_content }}
Thank You
	@endsection
@section('css')
<style>

</style>
@endsection
@section('js')
<script type="text/javascript">

</script>
@endsection
  