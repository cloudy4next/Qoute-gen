@extends('layouts.master')

@section('content')
  @include('inc.search')
      <div id="user_data">
        @include('pages.user_data')
      </div>
      <br>
      <button type="button" id ="refresh" class="button button2" onclick="my_button_click_handler">refresh</button>

@endsection

@push('scripts')

  <script>
    document.getElementById("refresh").addEventListener("click", function () {
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
          'search_query':search,
        },
        url: "{{ route('qoute.search-qoute') }}" + "?page=" + page,
        success:function(data) {
          $('#user_data').html(data);
        }
      });
    }
    function getMoreqoute(page) {
      $.ajax({
        type: "GET",
        url: "{{ route('qoute.get-qoute-rand') }}" + "?page=" + page,
        success:function(data) {
          $('#user_data').html(data);
        }
      });
    }
  </script>

  @endpush

