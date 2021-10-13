@extends('layouts.default')

@section('head')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
@stop

@section('content')


<div class="ui-widget">
  <label for="test">Teste: </label>
  <input id="test">
</div>

<script>
    $(document).ready(() => {

        var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
        ];
        const $autocomplete = $( "#test" ).autocomplete({
            source: "{{ url('/books-detail') }}",
            minLength: 1,
            select: function( event, ui ) {
                console.log( ui.item );
            },
        });

        $autocomplete.autocomplete( "instance" )._renderItem = function( ul, item ) {
            return $( "<li>" )
                .append( "<div>" + item.nome_livro + "</div>" )
                .appendTo( ul );
        };
        
        // const $autocomplete = $( "#test" ).autocomplete({
        //     source: "{{ url('/books-detail') }}",
        //     minLength: 1,
        //     select: function( event, ui ) {
        //         console.log( "Selected: " + ui.item.value + " aka " + ui.item.id );
        //     },
        // });
        // $autocomplete._renderItem = function( ul, item ) {
        //         console.log(ul, item)
        //         return $( "<li>" )
        //             .attr( "data-value", item.id_livro )
        //             .append( item.nome_livro )
        //             .appendTo( ul );
        //     }
    });
</script>
@stop