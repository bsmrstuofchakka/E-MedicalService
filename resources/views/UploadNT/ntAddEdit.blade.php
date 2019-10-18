@include('layout.beforeSearchMaster')
@include('layout.profileMaster')
@include('layout.SearchMaster')
@include('layout.afterSearchMaster')

    <section class="features_area section_gap">
        <div class="container">



            <div class="wrap-contact100">
                <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
                    Upload Notification/Task
				</span>
                </div>
                {!! Form::open(array('url' => url('nt/Save'), 'files' => true, 'class'=>'contact100-form validate-form') )  !!}

                @if(!empty($ntEdit))
                    <input type="hidden" name="id" value="{{$ntEdit->id}}">
                @endif
                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Date:</span>
                    <input class="input100" type="text"  name="date" value="@if(!empty($ntEdit)) {{$ntEdit->date}} @endif"  placeholder="Enter date">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Selection Type:</span>
                    <select class="input100" type="text" name="deposite" >
                        @if(!empty($ntEdit))
                            <option @if($ntEdit->deposite=="notification") selected @endif  value="notification">Notification</option>
                            <option @if($ntEdit->deposite=="task") selected @endif value="task">Task</option>
                        @else
                            <option value="notification">Notification</option>
                            <option value="task">Task</option>
                        @endif

                    </select>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Description:</span>
                    <input class="input100" type="text" name="description"  value="@if(!empty($ntEdit)) {{$ntEdit->description}} @endif" placeholder="Enter Description">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Document Number:</span>
                    <input class="input100" type="text" name="document"  value="@if(!empty($ntEdit)) {{$ntEdit->document}} @endif" placeholder="Enter Document Number">
                    <span class="focus-input100"></span>
                </div>



                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Upload(jpg/pdf):</span>
                    <input class="input100" type="file" name="upload"  value="@if(!empty($ntEdit)) {{$ntEdit->upload}} @endif" placeholder="Enter Upload pdf/Jpg">

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