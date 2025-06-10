@props(['user'])

<div {{ $attributes }} x-data="{
    followersCount: {{ $user->followers->count() }},
    following: {{ $user->isFollowedBy(auth()->user()) ? 'true' : 'false' }},
    follow() {
        axios.post('/follow/{{ $user->id }}')
            .then(res => {
                this.following = !this.following;
                this.followersCount = res.data.followersCount;
            })
            .catch(err => {
                console.error(err);
            });
    }
}" class="mt-4">
    {{ $slot }}
</div>
