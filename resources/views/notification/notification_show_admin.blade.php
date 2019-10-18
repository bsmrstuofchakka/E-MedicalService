@include('layout.beforeSearchMaster')
@include('layout.profileMaster')
<div class="search_input"  id="search_input_box">
    <div class="container">
        {!! Form::open(array('url' => url('notification/search'), 'files' => true, 'class'=>'d-flex justify-content-between') )  !!}


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
                       Notification
                    </span>
                </div>

                <div class="col-12">
                    <a class="primary-btn text-uppercase"  href="{{url('notification/add')}}">Add Notification</a>
                </div>

                <table class="responstable">

                    <tr>
                        <th>ID</th>
                        <td>Date</td>
                        <td>Title Of Notification</td>
                        <td>Upload</td>
                        @if($userTable->userType==1)
                        <td>ACTION</td>
                        @endif
                    </tr>



                    @if(isset($info[0]))
                        @foreach($info as $info1)

                            <tr>
                                <td>{{$info1->id}}</td>
                                <td>{{$info1->date}}</td>
                                <td>{{$info1->title}}</td>

                                <td><a download="true" href="{{asset(\Illuminate\Support\Facades\Storage::url($info1->upload))}}">File</a></td>

                             @if($userTable->userType==1)
                                <td>
                                    <a href="{{url('notification/edit').'?id='.$info1->id}}">Edit</a>/
                                    <a href="{{url('notification/delete').'?id='.$info1->id}}">Delete</a>
                                </td>
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