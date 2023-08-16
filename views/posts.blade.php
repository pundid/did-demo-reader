<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="container">
    @foreach ($posts as $post)
    <div class="post">
      <div class="avatar">
        <img src="path_to_avatar_image.jpg" alt="User Avatar">
      </div>
      <div class="content">
        <h3 class="username">{{$post['domain']}}</h3>
        <p class="message">{{$post['content']}}</p>
        <div class="interactions">
          <span class="retweets">
            <span class="retweet-icon">🔁</span>
            <span class="retweet-count">25</span>
          </span>
          <span class="comments">
            <span class="comment-icon">💬</span>
            <span class="comment-count">12</span>
          </span>
          <span class="post-link">
            <a href="path_to_post_page.html" class="post-link-icon">🔗</a>
          </span>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="container">
    <!-- Add more post blocks as necessary -->
  </div>
</body>

</html>