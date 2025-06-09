@props(['user'])

<div 
    {{ $attributes }}
    x-data="{
        followersCount: {{ $user->followers->count() }},
        following: {{ $user->isFollowedBy(auth()->user()) ? 'true' : 'false' }},
        follow() {
            this.following = !this.following;

            axios.post('/follow/{{ $user->id }}')
                .then(res => {
                    this.followersCount = res.data.followersCount;
                })
                .catch(err => {
                    console.error(err);
                });
        }
    }" 
    class="mt-4"
>
    {{ $slot }}
</div>
