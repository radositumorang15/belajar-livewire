<div>
    <form wire:submit="login">
        <flux:input type="email" label="Email" wire:model="email" />
        <flux:input type="password" label="Password" wire:model="password" />
        <flux:button type="submit" variant="primary">Login</flux:button>
    </form>
</div>
