<div class="content-element<% if $Style %>$CssStyle<% end_if %>">
    <div class="content-element__row">
        <% if $ShowTitle %>
            <div class="content-element__column">
                <h2 class="content-element__title">$Title</h2>
            </div>
        <% end_if %>
    </div>
    <div class="content-element__row">
        <% if $ImagePosition == 'before' %>
            <% include ImageBlock %>
            <% include ContentBlock %>
        <% else %>
            <% include ContentBlock %>
            <% include ImageBlock %>
        <% end_if %>
    </div>
</div>
