<h2>{{ $book->title }}</h2>
<h3>{{ $book->author }}</h3>
<p>{{ $book->released_at }}</p>
<a href="/books">All books</a>
<form action="/books/{{ $book->id }}/destroy" method="post">
    @csrf 
    @method('delete')
    <input type="submit" value="Delete">
</form>