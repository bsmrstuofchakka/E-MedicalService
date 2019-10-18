@include('layout.beforeSearchMaster')
@include('layout.profileMaster')
<div class="search_input"  id="search_input_box">
    <div class="container">
        {!! Form::open(array('url' => url('professionalInfo/search'), 'files' => true, 'class'=>'d-flex justify-content-between') )  !!}


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
					Professional Information
				</span>

                </div>

                <table class="responstable">

                    <tr>
                        <th>User ID</th>
                        <th>Last Academic Degree</th>
                        <th>Specialization</th>
                        <th>Current Designation & DOJ</th>
                        <th>Affiliation</th>
                        <th>Professional Address</th>
                        <th>First Designation & DOJ</th>
                        <th>Others Lin1</th>
                        <th>Others Lin2</th>
                        @if($userTable->userType==1)
                        <th>Action</th>
                            @endif
                    </tr>


                    @if(isset($professionalInfoMember[0]))
                        @foreach($professionalInfoMember as $professionalInfoM)
                            <tr>

                                <th>{{$professionalInfoM->userId}}</th>
                                <th>{{$professionalInfoM->ladegree}}</th>
                                <th>{{$professionalInfoM->specialization}}</th>
                                <th>{{$professionalInfoM->cdesignation}}</th>
                                <th>{{$professionalInfoM->affiliation}}</th>
                                <th>{{$professionalInfoM->parmaddress}}</th>
                                <th>{{$professionalInfoM->fdesignation}}</th>
                                <th>{{$professionalInfoM->oline1}}</th>
                                <th>{{$professionalInfoM->oline2}}</th>
                                @if($userTable->userType==1)
                                <th>
                                    <a href="{{url('professionalInfo/Edit').'?id='.$professionalInfoM->id}}">Edit /</a>
                                    <a href="{{url('professionalInfo/Delete').'?id='.$professionalInfoM->id}}">Delete</a>
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