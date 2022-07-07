@extends('layouts.master')

@section('content')
    @include('inc.search')
    <div id="user_data">
        @include('pages.user_data')
    </div>
    <br>
    <button type="button" id="refresh" class="button button2" onclick="my_button_click_handler">refresh</button>
@endsection

@push('scripts')
    <script>
        window.laravel_echo_port = '{{ env('LARAVEL_ECHO_PORT') }}';
    </script>
    <script src="//{{ Request::getHost() }}:{{ env('LARAVEL_ECHO_PORT') }}/socket.io/socket.io.js"></script>
    <script src="{{ url('/js/laravel-echo-setup.js') }}" type="text/javascript"></script>
    <script>
        const timeout = document.getElementsByClassName('notification')
        setTimeout(hideElement, 500) //milliseconds until timeout//
        function hideElement() {
            timeout.style.display = 'none'
    </script>
    <script type="text/javascript">
        var i = 0;
        window.Echo.channel('user-channel').listen('.NewMessage', (e) => {
            console.log(e);
        });
        window.Echo.channel('user-channel')
            .listen('.UserEvent', (data) => {
                console.log(data.title)
                i++;
                $("#notification").append('<div class="alert alert-success">' + data.title + '</div>');
            });

        setTimeout(hideElement, 500)
        const timeout = document.getElementById("notification");

        function hideElement() {
            timeout.remove();
        }
    </script>
    <script>
        document.getElementById("refresh").addEventListener("click", function() {
            getMoreqoute(1);
        });
        $(document).ready(function() {
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                searchQoutes(page);
                // getMoreqoute(page);

            });
            $('#search').on('keyup', function() {
                $value = $(this).val();
                searchQoutes(1);
            });


        });

        function searchQoutes(page) {
            var search = $('#search').val();
            $.ajax({
                type: "GET",
                data: {
                    'search_query': search,
                },
                url: "{{ route('qoute.search-qoute') }}" + "?page=" + page,
                success: function(data) {
                    $('#user_data').html(data);
                }
            });
        }

        function getMoreqoute(page) {
            $.ajax({
                type: "GET",
                url: "{{ route('qoute.get-qoute-rand') }}" + "?page=" + page,
                success: function(data) {
                    $('#user_data').html(data);
                }
            });
        }
    </script>
@endpush
