<div class="layer js-modal">
  <div class="modal">
    <div class="modal__inner">
     <!-- ×ボタン追記 -->
     <div class="modal__button-wrap">
       <button class="close-button js-close-button">
         <span></span>
         <span></span>
       </button>
      </div>
      <div class="modal__contents">
        <div class="modal__content">
          コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。コンテンツが入ります。
        </div>
        {{ $daysInMonth }}
        <table class="carendar-table" border="1">
          <thead>
            <th class="carendar-header">月</th>
            <th class="carendar-header">火</th>
            <th class="carendar-header">水</th>
            <th class="carendar-header">木</th>
            <th class="carendar-header">金</th>
            <th class="carendar-header">土</th>
            <th class="carendar-header">日</th>
          </thead>
          <tbody>
            @for($i = 1; $i < $daysInMonth; $i++)
              @if($i == 1)
                <tr>
                @if($dt->format('N')!=1)
                <td colspan="{{ $dt->format('N')-1 }}"></td>
                @endif
              @else
                @if($dt->format('N') == 1)
                <tr>
                <td class="carendar-day">{{ $dt->day }}</td>
              @endif
              @php $dt->addDay() @endphp

            </tr>
            @endfor
          </tbody>
        </table>
    </div>
      </div>
    </div>
  </div>
</div>