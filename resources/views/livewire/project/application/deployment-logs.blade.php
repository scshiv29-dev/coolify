<div
    class="scrollbar flex flex-col-reverse w-full overflow-y-auto border border-solid rounded border-coolgray-300 max-h-[32rem] p-4 mt-4 text-xs text-white">
    <pre class="font-mono whitespace-pre-wrap" @if ($isKeepAliveOn) wire:poll.2000ms="polling" @endif>{{ \App\Actions\CoolifyTask\RunRemoteProcess::decodeOutput($activity) }}</pre>
</div>
