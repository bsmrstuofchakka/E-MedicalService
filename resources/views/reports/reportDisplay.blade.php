@include('layout.beforeSearchMaster')
@include('layout.profileMaster')
<div class="search_input"  id="search_input_box">
    <div class="container">
        {!! Form::open(array('url' => url('searchReport'), 'files' => true, 'class'=>'d-flex justify-content-between') )  !!}



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
                        Reports
                    </span>
                </div>
                <table class="responstable">

                    <tr>
                        <th>User ID</th>
                        <th>Date</th>
                        <td>Deposite Type</td>
                        <td>Description</td>
                        <td>Document Number</td>
                        <td>Amount</td>
                        <td>Upload Files</td>
                        @if($userTable->userType==1)
                        <td>ACTION</td>
                        @endif
                    </tr>



                    @if(isset($reportList[0]))
                        @foreach($reportList as $reportL)

                            <tr>
                                <td>{{$reportL->userId}}</td>
                                <td>{{$reportL->date}}</td>
                                <td>{{$reportL->deposite}}</td>

                                <td>
                                    <a href="{{url('report/DisplayDetails').'?id='.$reportL->id}}"><p name="description" >{{str_limit($reportL->description,35,'............')}}</p></a>

                                </td>

                                <td>{{$reportL->amount}}</td>
                                <td>{{$reportL->document}}</td>
                                <td><a download="true" href="{{asset(\Illuminate\Support\Facades\Storage::url($reportL->upload))}}">File</a></td>
                                @if($userTable->userType==1)
                                <td>
                                    <a href="{{url('report/Edit').'?id='.$reportL->id}}">Edit</a>/
                                    <a href="{{url('report/Delete').'?id='.$reportL->id}}">Delete</a>
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


