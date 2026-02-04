@props([
    'title',
    'imageName',
    'passengers',
    'luggage',
    'category',
    'description',
    'features' => [],

    'icon' => 'fas fa-car',
    'iconColor' => 'var(--color-secondary)',
    'headerTextColor' => 'var(--color-dark)',
    'gradientFrom' => 'var(--color-accent)',
    'gradientTo' => 'var(--color-secondary)',

    'bookingUrl' => '/booking',
    'buttonText' => 'Book',
])

<div class="fade-in-up"
    style="height: 100%; display: flex; flex-direction: column; background: var(--color-white); border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(122, 125, 125, 0.08);">

    <div
        style="height: 250px; background: linear-gradient(45deg, {{ $gradientFrom }} 0%, {{ $gradientTo }} 100%); display: flex; align-items: end; justify-content: center; gap: 15px; padding: 20px;">
        <div style="text-align: center; display: flex; flex-direction: column; align-items: center;" >
            <img class="car-image" src="{{ URL::to('/') }}/images/{{ $imageName }}" alt="" srcset="" style="width: 80%;"/>
            <h3 style="margin-top: 20px; color: {{ $headerTextColor }}; font-size: 24px; font-weight: 500;">
                {{ $title }}
            </h3>
        </div>
    </div>

    <div style="padding: 40px; display: flex; flex-direction: column; flex: 1 ;">
        <div>
            <div style="display: flex; justify-content: space-around; margin-bottom: 25px;">
                <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <x-lucide-users class="w-7 h-7" style="color: var(--color-secondary);"/>
                    <div style="color: var(--color-secondary);">{{ $passengers }}</div>
                </div>
                <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <x-lucide-briefcase class="w-7 h-7" style="color: var(--color-secondary);"/>
                    <div style="color: var(--color-secondary);">{{ $luggage }}</div>
                </div>
            </div>

            <p style="color: var(--color-secondary); margin-bottom: 30px;">
                {{ $description }}
            </p>

            @if (!empty($features))
                <ul
                    style="list-style: none; margin-bottom: 30px; color: var(--color-secondary);">
                    @foreach ($features as $feature)
                        <li style="margin-bottom: 10px; padding-left: 25px; position: relative;">
                            <i class="fas fa-check"
                                style="color: var(--color-secondary); position: absolute; left: 0;"></i>
                            {{ $feature }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div style="text-align: center; margin-top: auto;">
            <a href="/booking" class="btn-primary" style="width: 100%;">
                {{ $buttonText }}
            </a>
        </div>
    </div>
</div>
