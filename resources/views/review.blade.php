<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Laravel Review</h1>
          <p class="text-center">This is a simple Laravel review application.</p>
        </div>
      </div>

      <h2 class="text-center">Create Review</h2>
      <form action="{{ route('review_store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Rating</label>
          <select class="form-control" name="rating">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Comment</label>
            <textarea class="form-control" name="comment"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Rating</label>
            <select class="form-control" name="status">
              <option value="1">Publish</option>
              <option value="2">Unpublish</option>
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <hr>

        <div class="row">
            <div class="col-md-12">
            <h2 class="text-center">Reviews</h2>
            <table class="table">
                <thead>
                <tr>
                    <td>SL</td>
                    <th>Rating</th>
                    <th>Comment</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($reviews as $key=>$review)
                    <tr>
                        <td>#{{ $key+1 }}</td>
                        <td>{{ $review->rating }}</td>
                        <td>{{ $review->comment }}</td>
                        <td>{{ $review->status }}</td>
                        <td><a href="#" class="btn btn-sm btn-warning">Edit</a>|<a href="{{ route('review_delete', ['id'=>$review->id]) }}" class="btn btn-sm btn-danger">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
