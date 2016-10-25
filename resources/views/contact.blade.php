@extends('layout.master')
@section('content')
<div class="container-fluid container-custom1">
          <nav class="navbar navbar-inverse">
                <ul class="nav navbar-nav navbar-right1">
                <a class="navbar-brand" href="/homepage">Home</a>
                <a class="navbar-brand" href="/portfolio">Portfolio</a>
                <a class="navbar-brand CustomContact" href="/contact">Contact</a>
                </ul>
          </nav>
      </div>


    <div class="container-fluid container-contact">
    	<form action="{{ route('SendMail') }}" method="post">
    		<input type="email" name="mail" id="mail"  placeholder="mail address">
    		<input type="text"  name="title" id="title" placeholder="title">
    		<button type="submit"> Send Mail </button>
    		{{ csrf_field() }}
    	</form>	
	</div>




<!--
        <div class="row">
            <div class="col-md-4 col-md-offset-1 contactaligment">
                <h2 style="color:#000000;">Contact Me</h2>
                <p>Please feel free to reach out to me if you have any questions or comments 
                about the services I offer. Also, you could always just send me a friendly hello.
                </p>
                <h4 style="color:#000000;">CONTACT INFORMATION</h4>
                <p>Attn: Devon Stank</p>
                <p>Devonstank.com</p>
                <p>116 South 3rd St.</p>
                <p>Lemoyne, PA 17043</p>
                <p>717-525-1031</p>
                <p>hello@devonstank.com</p>
            </div>
            <div class="col-md-5 col-md-offset-1 contactaligment">
                <form action="{{ route('sendmail')}}" method="post">
                        <div class="form-group">
                            <div class="col-lg-10">
                                <label class="control-label"  for="focusedInput">Full Name</label>
                            </div>
                            <div class="col-lg-5">
                                <input type="text" class="contactInputLength" name="title" placeholder="">
                            </div>
                            <div class="col-lg-5">
                                <input type="text" class="contactInputLength" id="LastName" placeholder="">
                            </div>
                             <div class="col-lg-5">
                                <p>First Name</p>
                            </div>
                             <div class="col-lg-5">
                                <p>Last Name</p>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-lg-10">
                                <label class="control-label"  for="focusedInput">Email</label>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" class="contactInputLength" id="InputEmail" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10">
                                <label class="control-label" for="focusedInput">Message</label>
                            </div>
                            <div class="col-lg-10">
                                <textarea rows="10" style="width:100%; max-width:100%;"> </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-10">
                            <button class="contact-button" type="submit" >Send</button>
                          </div>
                        </div>
			{{ csrf_field() }}
                </form>
            </div>
        </div>  
    </div>
-->
@stop
