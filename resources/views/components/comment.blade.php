@props(['comment'])

<div class="card bg-base-100 shadow">
    <div class="card-body">
        <div class="flex space-x-3">
            @if ($comment->user)
                <div class="avatar">
                    <div class="size-10 rounded-full">
                        <img src="<https://avatars.laravel.cloud/>{{ urlencode($comment->user->email) }}"
                            alt="{{ $comment->user->name }}'s avatar" class="rounded-full" />
                    </div>
                </div>
            @else
                <div class="avatar placeholder text-5xl">
                    @switch($comment->box_icon)
                        @case(1)
                            📦
                        @break

                        @case(2)
                            🍱
                        @break

                        @case(3)
                            🥡
                        @break

                        @case(4)
                            🧃
                        @break

                        @case(5)
                            🎁
                        @break

                        @case(6)
                            🗳️
                        @break

                        @case(7)
                            🗃️
                        @break

                        @case(8)
                            🧰
                        @break

                        @case(9)
                            🪗
                        @break

                        @default
                    @endswitch
                </div>
            @endif

            <div class="min-w-0">
                <div class="flex items-center gap-1">
                    <span
                        class="text-sm font-semibold">{{ $comment->user ? $comment->user->name : 'Words in a Box' }}</span>
                    <span class="text-base-content/60">·</span>
                    <span class="text-sm text-base-content/60">{{ $comment->created_at->diffForHumans() }}</span>
                </div>

                <p class="mt-1">
                    {{ $comment->message }}
                </p>
            </div>
        </div>
    </div>
</div>
