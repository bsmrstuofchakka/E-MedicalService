@include('layout.beforeSearchMaster')
@include('layout.profileMaster')
@include('layout.SearchMaster')
@include('layout.afterSearchMaster')




<section class="features_area section_gap">
        <div class="container">



            <div class="wrap-contact100">
                <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Photo Information
				</span>

                </div>

                {!! Form::open(array('url' => url('photo/Save'), 'files' => true, 'class'=>'contact100-form validate-form') )  !!}

                <div>
                @if(!empty($photoM))
                    <input type="hidden" name="id" value="{{$photoM->id}}">
                @endif
                </div>
            <div>
                @if(!empty($photoM))
                    <input type="hidden" name="userId" value="{{$photoM->userId}}">
                @endif
            </div>
                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Photo:</span>
                    <input class="input100" type="file" name="photo" placeholder="Enter photo">
                    @if(!empty($photoM->photo))
                        <img width="100" src="{{asset('/uploads/Photos/'.$photoM->photo)}}"  alt="">
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
                    <button class="contact100-form-btn2">




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