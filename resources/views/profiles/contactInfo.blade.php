@include('layout.beforeSearchMaster')
@include('layout.profileMaster')
@include('layout.SearchMaster')
@include('layout.afterSearchMaster')



<section class="features_area section_gap">
        <div class="container">



            <div class="wrap-contact100">
                <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Contact Information
				</span>

                </div>

                {!! Form::open(array('url' => url('contactInfoSave'), 'files' => true, 'class'=>'contact100-form validate-form') )  !!}



                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Contact Number:</span>
                        <input class="input100" type="text" name="cnumber" value="@if(!empty($contact)) {{$contact->cnumber}} @endif" placeholder="Enter contact number">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Email:</span>
                        <input class="input100" type="email" name="email" value="@if(!empty($contact)) {{$contact->email}} @endif" placeholder="Enter email">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Father's Name:</span>
                        <input class="input100" type="text" name="fname" value="@if(!empty($contact)) {{$contact->fname}} @endif" placeholder="Enter Father's name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Mother's Name:</span>
                        <input class="input100" type="text" name="mname" value="@if(!empty($contact)) {{$contact->mname}} @endif" placeholder="Enter Mother's name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Permanent Address:</span>
                        <input class="input100" type="text" name="paddress" value="@if(!empty($contact)) {{$contact->paddress}} @endif" placeholder="Enter permanent address">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Person for Contact in Emergency:</span>
                        <input class="input100" type="text" name="contactEmergency" value="@if(!empty($contact)) {{$contact->contactEmergency}} @endif" placeholder="contact emergency">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Relationship with Him/Her:</span>
                        <input class="input100" type="text" name="relationship" value="@if(!empty($contact)) {{$contact->relationship}} @endif" placeholder="Enter relationship with him/her">
                        <span class="focus-input100"></span>
                    </div>


                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn1">
						<span>
							Save
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                        </button>
                        <button class="contact100-form-btn2">

						<span><a href="{{url('nomineeInfoEdit')}}">
							Continue
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </a>


						</span>
                        </button>


                    </div>

                {!! Form::close() !!}
            </div>


        </div>


        </div>
    </section>

    <section class="about_area lite_bg">
        <div class="container">
            <div class="row align-items-center">

            </div>
            <div class="about_bg overlay"></div>
        </div>
    </section>

    </div>


    @include('layout.afterMain')