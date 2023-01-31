/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from "@wordpress/i18n";

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import {
	useBlockProps,
	InspectorControls,
	MediaUpload,
} from "@wordpress/block-editor";
import { TextControl, Panel, PanelBody, Button } from "@wordpress/components";

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import "./editor.scss";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
	function onChangeIcon(newIcon) {
		setAttributes({ image: newIcon.sizes.full.url });
	}

	return (
		<div {...useBlockProps()}>
			<InspectorControls key="setting">
				<Panel>
					<PanelBody>
						<TextControl
							className="blocks-base-control__input"
							label={"Heading"}
							value={attributes.heading}
							onChange={(val) => setAttributes({ heading: val })}
						/>
						<MediaUpload
							onSelect={onChangeIcon}
							type="image"
							value={attributes.image}
							render={({ open }) => (
								<Button
									onClick={open}
									icon="upload"
									className="editor-media-placeholder__button is-button is-default is-large"
								>
									Icon
								</Button>
							)}
						/>
					</PanelBody>
				</Panel>
			</InspectorControls>
			<div class="atc-work-card">
				<img src={attributes.image} />
				<h4>{attributes.heading}</h4>
			</div>
		</div>
	);
}
