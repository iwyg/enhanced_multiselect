/*
vim: set noexpandtab tabstop=4 shiftwidth=4 softtabstop=4
*/

/**
 * @package Assets
 * @author thomas appel <mail@thomas-appel.com>

 * Displays <a href="http://opensource.org/licenses/gpl-3.0.html">GNU Public License</a>
 * @license http://opensource.org/licenses/gpl-3.0.html GNU Public License
 */
(function ($, Symphony) {
	$(function () {
		Symphony.Language.add({'Selected': false});
		$('select[multiple]').multiselect({
			buttonText: Symphony.Language.get('Selected')
		});
		$('.frame').on('constructshow.duplicator', function (event) {
			$(event.target).find('select[multiple]').multiselect({
				buttonText: Symphony.Language.get('Selected')
			});
		});
	});
}(this.jQuery, this.Symphony));
