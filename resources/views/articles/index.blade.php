@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row table-responsive-sm">
            <div class="col-md-10 offset-md-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Articles</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>{{__('Title')}}</th>
                                <th>{{__('Body')}}</th>
                                <th>{{__('Created At')}} </th>
                                <th>{{__('Updated At')}} </th>
                                <th>{{__('Actions')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{ ucwords( $article->title) }}</td>
                                    <td>{{  $article->excerpt }}</td>
                                    <td>{{  $article->created_at }}</td>
                                    <td>{{  $article->updated_at }}</td>
                                    <td><a href="{{ route('articles.edit', $article->id) }}">Edit</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
