@include('layout.beforeSearchMaster')
@include('layout.profileMaster')
<div class="search_input"  id="search_input_box">
    <div class="container">
        {!! Form::open(array('url' => url('nomineeInfo/search'), 'files' => true, 'class'=>'d-flex justify-content-between') )  !!}


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
                        <th>Name</th>
                        <th>Father's Name</th>
                        <th>Mother's Name</th>
                        <th>Spouse's Name</th>
                        <th>Sex</th>
                        <th>Date of birth</th>
                        <th>Nationality</th>
                        <th>NID Number</th>
                        <th>Permanent Address</th>
                        <th>Present Address</th>
                        <th>Identification Sign</th>
                        <th>Photo</th>
                        @if($userTable->userType==1)
                        <th>Action</th>
                            @endif
                    </tr>


                    @if(isset($nomineeInfoMember[0]))
                        @foreach($nomineeInfoMember as $nomineeInfoM)
                            <tr>
                                <th>{{$nomineeInfoM->userId}}</th>
                                <th>{{$nomineeInfoM->nname}}</th>
                                <th>{{$nomineeInfoM->nfname}}</th>
                                <th>{{$nomineeInfoM->nmname}}</th>
                                <th>{{$nomineeInfoM->nsname}}</th>
                                <th>{{$nomineeInfoM->nsex}}</th>
                                <th>{{$nomineeInfoM->ndate}}</th>
                                <th>{{$nomineeInfoM->nnationality}}</th>
                                <th>{{$nomineeInfoM->nnid}}</th>
                                <th>{{$nomineeInfoM->npaddress}}</th>
                                <th>{{$nomineeInfoM->npresentaddress}}</th>
                                <th>{{$nomineeInfoM->isign}}</th>
                                <th>
                                    @if(!empty($nomineeInfoM->nphoto))
                                        <img width="100" src="{{asset('/uploads/nomineePhotos/'.$nomineeInfoM->nphoto)}}"  alt="">
                                    @endif

                                </th>
                                @if($userTable->userType==1)
                                <th>
                                    <a href="{{url('nomineeInfo/Edit').'?id='.$nomineeInfoM->id}}">Edit /</a>
                                    <a href="{{url('nomineeInfo/Delete').'?id='.$nomineeInfoM->id}}">Delete</a>
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