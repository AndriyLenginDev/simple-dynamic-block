const { useBlockProps, RichText } = wp.blockEditor;
const { TextControl } = wp.components;

import './editor.scss';

export default function Edit(props) {
	const blockProps = useBlockProps();
  const { setAttributes } = props;
  const { title, author, summary } = props.attributes;

  const onChangeTitle = (title) => {
    setAttributes({ title });
  };
  const onChangeAuthor = (author) => {
    setAttributes({ author });
  };
  const onChangeSummary = (summary) => {
    setAttributes({ summary });
  };

  return (
		<div { ...blockProps }>
      <TextControl
        label="Title"
        value={title}
        onChange={onChangeTitle}
      />

      <TextControl
        label="Author"
        value={author}
        onChange={onChangeAuthor}
      />

      <RichText
        placeholder="Book summary goes here."
        value={summary}
        onChange={onChangeSummary}
        allowedFormats={['core/bold', 'core/italic']}
      />
		</div>
  );
}
