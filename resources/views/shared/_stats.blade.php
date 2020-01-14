<a href="#"><strong id="following" class="stat">{{ count($user->followings) }}</strong>Follow</a>
<a href="#"><strong id="following" class="stat">{{ count($user->followers) }}</strong>Fans</a>
<a href="#"><strong id="following" class="stat">{{ $user->statuses()->count() }}</strong>Blog</a>
