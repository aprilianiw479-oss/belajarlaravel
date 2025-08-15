@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Detail Article</h3>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th width="25%">ID</th>
                    <th width="10px">:</th>
                    <td>{{$article->id}}</td>
                </tr>

                <tr>
                    <th width="25%">Title</th>
                    <th width="10px">:</th>
                    <td>{{$article->title}}</td>
                </tr>

                <tr>
                    <th width="25%">Category</th>
                    <th width="10px">:</th>
                    <td>{{$article->category_id}}</td>
                </tr>

                <tr>
                    <th width="25%">Created At</th>
                    <th width="10px">:</th>
                    <td>{{\Carbon\Carbon::parse($article->created_at)->isoFormat('DD/MM/Y HH:mm')}}</td>
                </tr>

                <tr>
                    <th width="25%">Update At</th>
                    <th width="10px">:</th>
                    <td>{{\Carbon\Carbon::parse($article->update_at)->isoFormat('DD/MM/Y HH:mm')}}</td>
                </tr>
            </tbody>
        </table>

        <div class="mt-3">
            <a href="{{ route('articles.index') }}" class="btn btn-primary">Back</a>
            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-secondary">Edit</a>
        </div>
    </div>
@endsection