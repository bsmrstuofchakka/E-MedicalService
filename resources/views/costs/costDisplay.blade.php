@include('layout.beforeSearchMaster')
@include('layout.profileMaster')
<div class="search_input"  id="search_input_box">
    <div class="container">
        {!! Form::open(array('url' => url('searchCost'), 'files' => true, 'class'=>'d-flex justify-content-between') )  !!}

            <input type="search" class="form-control" id="search_input" name="search"  placeholder="Search Here">

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
					Cost
				</span>

                </div>

                <div class="col-12">
                    <a class="primary-btn text-uppercase"  href="{{url('cost/Add')}}">Add Cost</a>
                </div>
                <table class="responstable">

                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Description</th>
                        <td>Month</td>
                        <td>Amount</td>
                        <td>Document Number</td>
                        <td>Upload Files</td>
                        @if($userTable->userType==1)
                        <td>ACTION</td>
                            @endif
                    </tr>



                    @if(isset($costList[0]))
                        @foreach($costList as $costL)

                            <tr>
                                <td>{{$costL->id}}</td>
                                <td>{{$costL->userId}}</td>

                                <td>
                                    <a href="{{url('cost/DisplayDetails').'?id='.$costL->id}}"><p name="description" >{{str_limit($costL->description,35,'............')}}</p></a>

                                </td>

                                <td>{{$costL->month}}</td>
                                <td>{{$costL->amount}}</td>
                                <td>{{$costL->document}}</td>



                                {{--<td> {{\Illuminate\Support\Facades\Storage::path($upayL->upload)}} </td>--}}
                                <td><a download="true" href="{{asset(\Illuminate\Support\Facades\Storage::url($costL->upload))}}">File</a></td>
                                @if($userTable->userType==1)
                                <td>
                                    <a href="{{url('cost/Edit').'?id='.$costL->id}}">Edit</a>/
                                    <a href="{{url('cost/Delete').'?id='.$costL->id}}">Delete</a>
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
