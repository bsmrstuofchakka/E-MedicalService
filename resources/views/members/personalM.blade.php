@include('layout.beforeSearchMaster')
@include('layout.profileMaster')
<div class="search_input"  id="search_input_box">
    <div class="container">
        {!! Form::open(array('url' => url('personalInfo/search'), 'files' => true, 'class'=>'d-flex justify-content-between') )  !!}


        <input type="search" class="form-control" id="search_input" name="search"   placeholder="Search Here">

        <button type="submit" class="btn"></button>


        {!! Form::close() !!}
    </div>
</div>
@include('layout.afterSearchMaster')




<section class="features_area section_gap">
        <div class="container">



            <div >
                <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Personal Information
				</span>

                </div>

                <table class="responstable">

                    <tr>
                        <th>User ID</th>
                        <th>Title</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Date of birth</th>
                        <th>Sex</th>
                        <th>Nationality</th>
                        <th>NID Number</th>
                        @if($userTable->userType==1)
                        <th>Action</th>
                            @endif
                    </tr>


                    @if(isset($personalInfoMember[0]))
                        @foreach($personalInfoMember as $personalInfoM)
                    <tr>

                        <th>{{$personalInfoM->userId}}</th>
                        <th>{{$personalInfoM->title}}</th>
                        <th>{{$personalInfoM->firstname}}</th>
                        <th>{{$personalInfoM->middlename}}</th>
                        <th>{{$personalInfoM->lastname}}</th>
                        <th>{{$personalInfoM->date}}</th>
                        <th>{{$personalInfoM->sex}}</th>
                        <th>{{$personalInfoM->nationality}}</th>
                        <th>{{$personalInfoM->nid}}</th>
                        @if($userTable->userType==1)
                        <th>
                            <a href="{{url('personalInfo/Edit').'?id='.$personalInfoM->id}}">Edit /</a>
                            <a href="{{url('personalInfo/Delete').'?id='.$personalInfoM->id}}">Delete</a>
                        </th>
                            @endif
                    </tr>
                    @endforeach

                    @endif

                </table>

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