<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dev.Bitternews</title>
    </head>
    <body>

    @php 
    use App\Models\web\KaeArticle;

    $articles = KaeArticle::all();
    @endphp

    <table id='test'>
        <tr>
            <th>num_article</th>
            <th>num_source</th>
            <th>num_user</th>
            <th>Titre</th>
            <th>contenue</th>
            <th>date</th>
        </tr>
         @foreach ($articles as $article)
         <tr>
            <td>{{$article->ID_ARTICLE}}</td>
            <td>{{$article->ID_SOURCE}}</td>
            <td>{{$article->ID_USER}}</td>
            <td>{{$article->TITLE}}</td>
            <td>{{$article->CONTENT}}</td>
            <td>{{$article->FETCH_DATE}}</td>
        </tr>
         @endforeach

    </table>
    </body>
</html>
