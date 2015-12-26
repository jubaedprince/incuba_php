@extends('app')

@section('content')
    <div class="row" data-auto-height=".c-height">
        <div class="col-md-6">
            <div class="c-body">
                <div class="c-section">
                    <h3>JANGO Inc.</h3>
                </div>
                <div class="c-section">
                    <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Address</div>
                    <p>25, Lorem Lis Street,
                        <br/>Orange C, California,
                        <br/>United States of America</p>
                </div>
                <div class="c-section">
                    <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Contacts</div>
                    <p>
                        <strong>T</strong> 800 123 0000
                        <br/>
                        <strong>F</strong> 800 123 8888</p>
                </div>
                <div class="c-section">
                    <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Social</div>
                    <br/>
                    <ul class="c-content-iconlist-1 c-theme">
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-youtube-play"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="c-contact">
                <div class="c-content-title-1">
                    <h3 class="c-font-uppercase c-font-bold">Keep in touch</h3>
                    <div class="c-line-left"></div>
                    <p class="c-font-lowercase">Our helpline is always open to receive any inquiry or feedback. Please feel free to drop us an email from the form below and we will get back to you as soon as we can.</p>
                </div>
                <form action="#">
                    <div class="form-group">
                        <input type="text" placeholder="Your Name" class="form-control c-square c-theme input-lg"> </div>
                    <div class="form-group">
                        <input type="text" placeholder="Your Email" class="form-control c-square c-theme input-lg"> </div>
                    <div class="form-group">
                        <input type="text" placeholder="Contact Phone" class="form-control c-square c-theme input-lg"> </div>
                    <div class="form-group">
                        <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control c-theme c-square input-lg"></textarea>
                    </div>
                    <button type="submit" class="btn c-theme-btn c-btn-uppercase btn-lg c-btn-bold c-btn-square">Submit</button>
                </form>
            </div>
        </div>
    </div>
@stop

@section('footer')
    <script>alert('hey people!');</script>
@stop

