@include('layout.beforeSearchMaster')
@include('layout.profileMaster')
@include('layout.SearchMaster')
@include('layout.afterSearchMaster')



<section class="features_area section_gap">
        <div class="container">



            <div class="wrap-contact100">
                <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
                    Task
				</span>
                </div>
                {!! Form::open(array('url' => url('taskSave'), 'files' => true, 'class'=>'contact100-form validate-form') )  !!}

                @if(!empty($info))
                    <input type="hidden" name="id" value="{{$info->id}}">
                @endif

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Date:</span>
                    <input class="input100" type="text"  name="date"  value="@if(!empty($info)) {{$info->date}} @endif" placeholder="Enter date">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Title Of Task:</span>
                    <input class="input100" type="text"  name="title"  value="@if(!empty($info)) {{$info->title}} @endif" placeholder="Enter title">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Upload</span>
                    <input class="input100" type="file" name="upload"  value="@if(!empty($info)) {{$info->upload}} @endif"  placeholder="Enter Upload pdf/Jpg">
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