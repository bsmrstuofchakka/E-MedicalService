@include('layout.beforeSearchMaster')
@include('layout.profileMaster')
@include('layout.SearchMaster')
@include('layout.afterSearchMaster')




<section class="features_area section_gap">
		<div class="container">



            <div class="wrap-contact100">
                <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Personal Information
				</span>
                </div>
                {!! Form::open(array('url' => url('personalInfo/Save'), 'files' => true, 'class'=>'contact100-form validate-form') )  !!}

                    @if(!empty($personal))
                        <input type="hidden" name="id" value="{{$personal->id}}">
                    @endif

                @if(!empty($personal))
                    <input type="hidden" name="userId" value="{{$personal->userId}}">
                @endif

                <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Title:</span>
                        <select class="input100" type="text" name="title">
                            @if(!empty($personal))
                                <option @if($personal->title=="Mr.") selected @endif  value="Mr.">Mr.</option>
                                <option @if($personal->title=="Ms.") selected @endif value="Ms.">Ms.</option>
                                <option @if($personal->title=="Mrs.") selected @endif value="Mrs.">Mrs.</option>
                                <option @if($personal->title=="Dr.") selected @endif value="Dr.">Dr.</option>
                                <option @if($personal->title=="Engnr.") selected @endif value="Engnr.">Engnr.</option>
                            @else
                                <option value="Mr.">Mr.</option>
                                <option value="Ms.">Ms.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Dr.">Dr.</option>
                                <option value="Engnr.">Engnr.</option>
                            @endif

                        </select>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">First Name:</span>
                        <input class="input100" type="text" name="firstname" value="@if(!empty($personal)) {{$personal->firstname}} @endif"  placeholder="Enter first name">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Middle Name:</span>
                        <input class="input100" type="text" name="middlename" value="@if(!empty($personal)) {{$personal->middlename}} @endif" placeholder="Enter Middle Name">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">Last Name:</span>
                        <input class="input100" type="text" name="lastname" value="@if(!empty($personal)) {{$personal->lastname}} @endif" placeholder="Enter last name">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">Date:</span>
                        <input class="input100" type="text"  name="date" value="@if(!empty($personal)) {{$personal->date}} @endif"  placeholder="Enter date">
                        <span class="focus-input100"></span>
                    </div>



                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Sex:</span>
                        <select class="input100" type="text" name="sex"  >
                            @if(!empty($personal))
                                <option @if($personal->sex=="male") selected @endif  value="male">Male</option>
                                <option @if($personal->sex=="female") selected @endif value="female">Female</option>
                            @else
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            @endif
                        </select>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Nationality:</span>
                        <input class="input100" type="text" name="nationality" value="@if(!empty($personal)) {{$personal->nationality}} @endif" placeholder="Enter Nationality">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">NID Number:</span>
                        <input class="input100" type="text" name="nid" value="@if(!empty($personal)) {{$personal->nid}} @endif" placeholder="Enter NID Number">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn1">
						<span>
							Save
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
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