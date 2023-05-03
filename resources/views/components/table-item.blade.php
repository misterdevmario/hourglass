<table class="border-collapse border border-green-800" style="width:100% !important">
    <thead>
    <tr>
        <td colspan="5" class="text-center p-1">
            <p class="font-bold	text-base	">
                {{ $title }}</p>
        </td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td rowspan="4"><img src="/assets/images/{{ $imageLogo }}"
                             width="59x" height="56px">
        </td>
        <td></td>
        <td><img src="/assets/images/Buffet.svg" style="background-color:gray;"
                 width="20px" height="20px"></td>
        <td><p class="text-sm">&nbsp;{{ $menuText1 }}</p></td>
        <td></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><img src="/assets/images/Menu.svg" style="background-color:gray;"
                 width="20px" height="20px">
        </td>
        </td>
        <td><p class="text-sm">{{ $menuText2 }}</p></td>
        <td></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><img src="/assets/images/Clock.svg" style="background-color:gray;"
                 width="20px" height="20px">
        </td>
        <td><p class="text-sm">{{ $menuSchedule }}</p></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td><img src="/assets/images/Members.svg" style="background-color:gray;"
                 width="20px" height="20px">
        </td>
        <td><p class="text-sm">{{ $menuMember }}</p></td>
        <td></td>
    </tr>
    </tbody>
</table>
