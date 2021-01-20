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
                    <h1 class="page-header"> {{ $title }}  </h1>
                </div> <!-- /.col-lg-12 -->
            </div> <!-- /.row -->
            @endif

            @include('admin.flash_msg')


            <div class="row">
                <div class="col-xs-12">



                    @if($ads->total() > 0)
                    <table class="table table-bordered table-striped table-responsive">

                        @foreach($ads as $ad)
                        <tr>
                            <td>
                                <h5><a href="{{ route('single_ad', $ad->slug) }}" target="_blank">#{{ $ad->id }} ({!! $ad->status_context() !!})</h5>
                                    <p class="text-muted">
                                       <i class="fa fa-clock-o"></i> {{ $ad->posting_datetime()  }}
                                   </p>
                               </a>
                           </td>

                           <td>
                            <h5><a href="#" target="_blank">{{ $ad->seller_name }}</a> </h5>

                        </td>

                        <td>
                            <h5><a href="{{ route('single_ad', $ad->slug) }}" target="_blank"></a> ({!! $ad->price !!} Pessacoin)</h5>

                        </td>
                        <td>
                            <h5><a href="{{ route('single_ad', $ad->slug) }}" target="_blank"></a> {!! $ad->payment_method !!} </h5>

                        </td>


                        <td>

                        <!--     <a href="{{ route('reports_by_ads', $ad->slug) }}">
                                <i class="fa fa-exclamation-triangle"></i> @lang('app.reports') : {{ $ad->reports->count() }}
                            </a>

                            <hr />

                            <a href="{{ route('edit_ad', $ad->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i> </a>

                            <a href="javascript:;" class="btn btn-danger deleteAds" data-slug="{{ $ad->slug }}"><i class="fa fa-trash"></i> </a> -->

                            @if($ad->status ==1)
                      <!--       <a href="javascript:;" class="btn btn-warning blockAds" data-slug="{{ $ad->slug }}" data-value="2"><i class="fa fa-ban"></i> </a> -->


                            <hr>

                            <form action="{{route('send_payments')}}" method="get">
                               <input type="hidden" name="ad_id" value="{{ $ad->id }}">
                               <input type="hidden" value="exchange" name ="payment_status">
                               <input type="hidden" name="ad_price" value="{{ $ad->price*get_option('premium_ads_price') }}">
                               <button type="submit" class="btn btn-info">Send Payments</button>
                           </form>
                           
                           @else
                         <!--   <a href="javascript:;" class="btn btn-success approveAds" data-slug="{{ $ad->slug }}" data-value="1"><i class="fa fa-check-circle-o"></i> </a> -->
                           @endif
                        <a href="javascript:;" class="btn btn-danger deleteAds" data-slug="{{ $ad->slug }}"><i class="fa fa-trash"></i> </a>

                       </td>
                   </tr>
                   @endforeach

               </table>

               @else
               <h2>@lang('app.there_is_no_ads')</h2>
               @endif

               {!! $ads->links() !!}

           </div>
       </div>

   </div>   <!-- /#page-wrapper -->

</div>   <!-- /#wrapper -->



</div> <!-- /#container -->
@endsection

@section('page-js')

<script>
    $(document).ready(function() {
        $('.deleteAds').on('click', function () {
            if (!confirm('{{ trans('app.are_you_sure') }}')) {
                return '';
            }
            var selector = $(this);
            var slug = selector.data('slug');
            $.ajax({
                url: '{{ route('delete_ads') }}',
                type: "POST",
                data: {slug: slug, _token: '{{ csrf_token() }}'},
                success: function (data) {
                    if (data.success == 1) {
                        selector.closest('tr').hide('slow');
                        toastr.success(data.msg, '@lang('app.success')', toastr_options);
                    }
                }
            });
        });

        $('.approveAds, .blockAds').on('click', function () {
            var selector = $(this);
            var slug = selector.data('slug');
            var value = selector.data('value');
            $.ajax({
                url: '{{ route('ads_status_change') }}',
                type: "POST",
                data: {slug: slug, value: value, _token: '{{ csrf_token() }}'},
                success: function (data) {
                    if (data.success == 1) {
                        selector.closest('tr').hide('slow');
                        toastr.success(data.msg, '@lang('app.success')', toastr_options);
                    }
                }
            });
        });
    });

</script>

<script>
    @if(session('success'))
    toastr.success('{{ session('success') }}', '{{ trans('app.success') }}', toastr_options);
    @endif
    @if(session('error'))
    toastr.error('{{ session('error') }}', '{{ trans('app.success') }}', toastr_options);
    @endif
</script>

@endsection