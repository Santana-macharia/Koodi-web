@extends('layout.main')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')
<div class="container">
    <div id="wrapper">
        @include('admin.sidebar_menu')

        <div id="page-wrapper">
            @if( ! empty($title))
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> {{ $title }} {{ $total_users}} </h1>
                </div> <!-- /.col-lg-12 -->
            </div> <!-- /.row -->
            @endif

            @include('admin.flash_msg')

            <div class="row">
                <div class="col-xs-12">

                    <input type="text" id="search" placeholder="Type to search">
                    <table class="table table-bordered table-striped" id="table">
                      <tr>
                        <th>@lang('app.name')</th>
                        <th>ID</th>
                        <th>Pessacoin</th>
                        <th>Earnings</th>
                        <th>Days</th>
               <!--          <th>@lang('app.email')</th> -->
                        <th>@lang('app.created_at')</th>
                        <th>@lang('app.actions')</th>
                    </tr>
                    @foreach($users as $user)

                    <tr>
                        <th>{!! '<a href="'.route('user_info', $user->id).'">'.$user->name.'</a>' !!}</th>
                        <th>#{!! $user->id !!}</th>
                          <th>{!! $user->crypto_wallet  !!}</th>
                            <th>{!! $user->earnings !!}</th>
                            <th>{!! $user->days !!}</th>
                      <!--   <th>{!! $user->email !!}</th> -->
                        <th>{!! $user->signed_up_datetime() !!}</th>
                        <th>
                            @php
                            $html = '<a href="'.route('user_info', $user->id).'" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> '.trans('app.view').'</a>';

                      

                    echo $html;
                    @endphp

                     <a href="#{{ $user->id }}" class="btn btn-danger btn-xs" data-target="#payment{{ $user->id }}" data-toggle="modal"> Update</a>
                </th>
              
            </tr>

                 <!--make payment modal-->
                    <div id="payment{{ $user->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h5 class="modal-title">You want to update {{ $user->name }} amount</h5>
                        </div>

                        <div class="modal-body" style="height:250px">
                            <!--start form-->

                      <form action="{{ route('update-amount') }}" method="post"> @csrf


              
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <div class="row form-group">
                              <label class="col-md-3 control-label" for="email">PessaCoins</label>
                              <div class="col-md-9">
                                 <input type="text" name="crypto_wallet" value="{{ $user->crypto_wallet }}">
                          </div>
                      </div>

                         <div class="row form-group">
                              <label class="col-md-3 control-label" for="email">Earning PessaCoins</label>
                              <div class="col-md-9">
                                 <input type="text" name="earnings" value="{{ $user->earnings }}">
                          </div>
                      </div>

                       <div class="row form-group">
                              <label class="col-md-3 control-label" for="email">Days</label>
                              <div class="col-md-9">
                                 <input type="text" name="days" value="{{ $user->days }}">
                          </div>
                      </div>

                      <div class="row form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-sm btn-primary" name="del" value="update">Proceed</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true" >Close</button>
                        </div>
                    </div>


                  </form>
                    <!--end form-->
                </div>

            </div><!--modal content-->
        </div><!--modal dialog-->
    </div>

            @endforeach
        </table>

         

                     <!--    <table class="table table-bordered table-striped" id="jDataTable">
                            <thead>
                            <tr>
                                <th>@lang('app.name')</th>
                                <th>@lang('app.via')</th>
                                <th>@lang('app.email')</th>
                                <th>@lang('app.created_at')</th>
                                <th>@lang('app.actions')</th>
                            </tr>
                            </thead>

                            @foreach($users as $user)

                                <tr>
                                    <th>{!! '<a href="'.route('user_info', $user->id).'">'.$user->name.'</a>' !!}</th>
                                    <th>{!! $user->user_name !!}</th>
                                    <th>{!! $user->email !!}</th>
                                    <th>{!! $user->signed_up_datetime() !!}</th>
                                    <th>
                                        @php
                                            $html = '<a href="'.route('user_info', $user->id).'" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> '.trans('app.view').'</a>';

                       if($user->feature == 0){
                           $html .= '<a href="javascript:;" class="btn btn-default btn-xs agent-feature-btn" data-user-id="'.$user->id.'"><i class="fa fa-star-o"></i></a>';
                       }else{
                           $html .= '<a href="javascript:;" class="btn btn-default btn-xs agent-feature-btn" data-user-id="'.$user->id.'"><i class="fa fa-star"></i></a>';
                       }

                       echo $html;
                                        @endphp
                                    </th>
                                </tr>

                            @endforeach

                        </table> -->

                        {!! $users->links() !!}

                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
    @endsection

    @section('page-js')
    <script>

        var $rows = $('#table tr');
        $('#search').keyup(function() {
            var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
            
            $rows.show().filter(function() {
                var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        });


        $(document).ready(function() {

            $(document).on('click','.agent-feature-btn', function(){
                var user_id = $(this).data('user-id');
                $that = $(this);
                $.ajax({
                    type : 'POST',
                    url : '{{ route('change_user_feature') }}',
                    data: { user_id : user_id, _token : '{{csrf_token()}}' },
                    success : function(data){
                        $that.html(data);
                    }
                });
            });

        });
    </script>
    @endsection