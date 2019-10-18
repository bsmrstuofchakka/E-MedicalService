@include('layout.beforeSearchMaster')
@include('layout.profileMaster')
@include('layout.SearchMaster')
@include('layout.afterSearchMaster')



<section class="features_area section_gap">
        <div class="container">



            <div >
                <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Photo Information
				</span>

                </div>
                <div>
                <table class="responstable">

                    <tr>
                        <th>User ID</th>
                        <th>Photo</th>
                        @if($userTable->userType==1)
                        <th>Action</th>
                            @endif
                    </tr>


                    @if(isset($photoMember[0]))
                        @foreach($photoMember as $photoM)
                            <tr>

                                <th>{{$photoM->userId}}</th>

                                <th>
                                    @if(!empty($photoM->photo))
                                        <img width="100" src="{{asset('/uploads/Photos/'.$photoM->photo)}}"  alt="">
                                    @endif

                                </th>
                                @if($userTable->userType==1)
                                <th>
                                    <a href="{{url('photo/Edit').'?id='.$photoM->id}}">Edit /</a>
                                    <a href="{{url('photo/Delete').'?id='.$photoM->id}}">Delete</a>
                                </th>
                                    @endif
                            </tr>
                        @endforeach

                    @endif

                </table>
                </div>
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