@if($user->hasAvatar())
    <img src="/imgs/user-avatar.png" alt="User avatar" width="{{ $size }}" height="{{ $size }}" class="user-avatar">
@else
    <img src="/imgs/user-avatar.png" alt="User avatar" width="{{ $size }}" height="{{ $size }}" class="user-avatar">
@endif