<div class="content-element<% if $Style %>$CssStyle<% end_if %>">
    <% if $ShowTitle %>
    <div class="content-element__row">
        <% if $ShowTitle %>
            <div class="content-element__column">
                <h2 class="content-element__title">$Title</h2>
            </div>
        <% end_if %>
    </div>
    <% end_if %>
    <div class="content-element__row">
        <% if $VideoPosition == 'before' %>
            <% include VideoBlock %>
            <% include ContentBlock %>
        <% else %>
            <% include ContentBlock %>
            <% include VideoBlock %>
        <% end_if %>
    </div>
</div>