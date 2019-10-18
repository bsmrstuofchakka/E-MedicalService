@include('layout.beforeSearchMaster')
@include('layout.profileMaster')
@include('layout.SearchMaster')
@include('layout.afterSearchMaster')



<section class="features_area section_gap">
        <div class="container">



            <div class="wrap-contact100">
                <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Nominee Information
				</span>

                </div>

                {!! Form::open(array('url' => url('nomineeInfo/Save'), 'files' => true, 'class'=>'contact100-form validate-form') )  !!}

                @if(!empty($nomineeInfoM))
                    <input type="hidden" name="id" value="{{$nomineeInfoM->id}}">
                @endif

                @if(!empty($nomineeInfoM))
                    <input type="hidden" name="userId" value="{{$nomineeInfoM->userId}}">
                @endif

                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Name:</span>
                    <input class="input100" type="text" name="nname" value="@if(!empty($nomineeInfoM)) {{$nomineeInfoM->nname}} @endif" placeholder="Enter name">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Father's Name:</span>
                    <input class="input100" type="text" name="nfname" value="@if(!empty($nomineeInfoM)) {{$nomineeInfoM->nfname}} @endif" placeholder="Enter Father's name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Mother's Name:</span>
                    <input class="input100" type="text" name="nmname" value="@if(!empty($nomineeInfoM)) {{$nomineeInfoM->nmname}} @endif" placeholder="Enter Mother's name">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Spouse's Name:</span>
                    <input class="input100" type="text" name="nsname" value="@if(!empty($nomineeInfoM)) {{$nomineeInfoM->nsname}} @endif" placeholder="Enter spouse's name">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Sex:</span>
                    <select class="input100" type="text" name="nsex">
                        @if(!empty($nomineeInfoM))
                            <option @if($nomineeInfoM->nsex=="male") selected @endif  value="male">Male</option>
                            <option @if($nomineeInfoM->nsex=="female") selected @endif value="female">Female</option>
                        @else
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        @endif

                    </select>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Date:</span>
                    <input class="input100" type="text"  name="ndate" value="@if(!empty($nomineeInfoM)) {{$nomineeInfoM->ndate}} @endif"  placeholder="Enter date">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Nationality:</span>
                    <input class="input100" type="text" name="nnationality" value="@if(!empty($nomineeInfoM)) {{$nomineeInfoM->nnationality}} @endif" placeholder="Enter Nationality">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">NID Number:</span>
                    <input class="input100" type="text" name="nnid" value="@if(!empty($nomineeInfoM)) {{$nomineeInfoM->nnid}} @endif" placeholder="Enter NID Number">
                    <span class="focus-input100"></span>
                </div>



                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Permanent Address:</span>
                    <input class="input100" type="text" name="npaddress" value="@if(!empty($nomineeInfoM)) {{$nomineeInfoM->npaddress}} @endif" placeholder="Enter permanent address">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Present Address:</span>
                    <input class="input100" type="text" name="npresentaddress" value="@if(!empty($nomineeInfoM)) {{$nomineeInfoM->npresentaddress}} @endif" placeholder="Enter present address">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Identification Sign:</span>
                    <input class="input100" type="text" name="isign" value="@if(!empty($nomineeInfoM)) {{$nomineeInfoM->isign}} @endif" placeholder="identification sign">
                    <span class="focus-input100"></span>
                </div>

                <!-- $contents = pathinfo(storage_path().'/zOEh8zefUuHmOhlLY80UNNneTO5tJmv1ECfrwOpF.png');
                // img width="100px" src="asset('admin/uploads/'.$flower-image)}}

                //  dd( $contents['extension']);
                -->
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Photo:</span>
                    <input class="input100" type="file" name="nphoto"  placeholder="Enter photo">

                    @if(!empty($nomineeInfoM->nphoto))
                        <img width="80" src="{{asset('/uploads/nomineePhotos/'.$nomineeInfoM->nphoto)}}"  alt="">
                    @endif

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