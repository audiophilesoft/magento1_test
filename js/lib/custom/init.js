function showAll(event, link)
{
    event.preventDefault();


    jQuery.get(link.href, null, function (data) {

        var new_element = htmlToDOM(data);

        var target = jQuery(link).closest('.product_list')[0];

        target.parentNode.replaceChild(new_element, target);
    });

}

function htmlToDOM(html) {
    var parser = new DOMParser();
    return parser.parseFromString(html, "text/html").getElementsByTagName('body')[0].firstChild;
}