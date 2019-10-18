@include('layout.beforeSearchMaster')
@include('layout.profileMaster')
@include('layout.SearchMaster')
@include('layout.afterSearchMaster')


<section class="features_area section_gap">
        <div class="container">



            <div class="wrap-contact100">
                <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Professional Information
				</span>

                </div>

                {!! Form::open(array('url' => url('professionalInfoSave'), 'files' => true, 'class'=>'contact100-form validate-form') )  !!}


                <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Last Academic Degree:</span>
                        <input class="input100" type="text" name="ladegree" value="@if(!empty($professional)) {{$professional->ladegree}} @endif" placeholder="last academic degree">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Specialization:</span>
                        <input class="input100" type="text" name="specialization" value="@if(!empty($professional)) {{$professional->specialization}} @endif" placeholder="Enter specialization">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Current Designation & DOJ:</span>
                        <input class="input100" type="text" name="cdesignation" value="@if(!empty($professional)) {{$professional->cdesignation}} @endif" placeholder="Enter current designation & DOJ">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Affiliation:</span>
                        <input class="input100" type="text" name="affiliation" value="@if(!empty($professional)) {{$professional->affiliation}} @endif" placeholder="Enter affiliation">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Professional Address:</span>
                        <input class="input100" type="text" name="parmaddress" value="@if(!empty($professional)) {{$professional->parmaddress}} @endif" placeholder="Enter professional address">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">First Designation & DOJ:</span>
                        <input class="input100" type="text" name="fdesignation" value="@if(!empty($professional)) {{$professional->fdesignation}} @endif" placeholder="Enter first designation & DOJ">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Others Lin1:</span>
                        <input class="input100" type="text" name="oline1" value="@if(!empty($professional)) {{$professional->oline1}} @endif" placeholder="Enter others lin1">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input" >
                        <span class="label-input100">Others Lin2:</span>
                        <input class="input100" type="text" name="oline2"  value="@if(!empty($professional)) {{$professional->oline2}} @endif" placeholder="Enter others lin2">
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

						<span><a href="{{url('contactInfoEdit')}}">
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