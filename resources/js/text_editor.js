import EditorJS from "@editorjs/editorjs";
import Header from "@editorjs/header";
import Embed from "@editorjs/embed";
import Quote from "@editorjs/quote";
import List from "@editorjs/list";
import CodeTool from "@editorjs/code";
import Table from "@editorjs/table";
import Checklist from "@editorjs/checklist";
import MarkerTool from "@editorjs/marker";
import DelimiterTool from "@editorjs/delimiter";
import image from "@editorjs/image";
import RawTool from '@editorjs/raw';
import linkTool from "@editorjs/link";
import Warning from '@editorjs/warning';
import Paragraph from "@editorjs/paragraph";
import underline from "@editorjs/underline";
import AttachesTool from '@editorjs/attaches';
import InlineCode from '@editorjs/inline-code';
import TextVariantTune from '@editorjs/text-variant-tune';
import simpleimage from '@editorjs/simple-image'

const editor = new EditorJS({
    holder: "editor",
    tools: {
        header: {
            class: Header,
            inlineToolbar: true,
            config: {
                levels: [1, 2, 3, 4, 5, 6],
                defaultLevel: 2,
            },
        },
       
        warning: {
            class: Warning,
            inlineToolbar: true,
            shortcut: 'CMD+SHIFT+W',
            config: {
              titlePlaceholder: 'Title',
              messagePlaceholder: 'Message',
            },
        },
        simpleimage:simpleimage,
        underline:underline,
        attaches: {
            class: AttachesTool,
            config: {
              endpoint: '/uploadFile'
            }
          },
          
          raw: RawTool,
          textVariant: TextVariantTune,
          inlineCode: {
            class: InlineCode,
            shortcut: 'CMD+SHIFT+M',
          },
        linkTool: {
            class: linkTool,
            inlineToolbar:true,
            config: {
                endpoint: "/uploadLink", // Laravel route for fetching link metadata
             queryParam: 'search'
            },
        },
        marker: MarkerTool,
        paragraph: {
            class: Paragraph,
            inlineToolbar: true,
            tunes: ['textVariant'],
        },
        Code: {
            class: CodeTool,
            inlineToolbar:true,
            config: {
                placehoder: "skldjflksdf",
            },
        },
        embed: Embed,
        quote: Quote,
        list: List,
        table: Table,
        // divider: Divider,
        checklist: Checklist,
        // audio: AudioTool,
        // file: FileTool,
        delimiter: DelimiterTool,
        image: {
            class: image,
            config: {
                // Define an uploader for the image tool
                uploader: {
                    async uploadByFile(file) {
                        // This function is called when the user selects an image file
                        // You can implement your own file upload logic here
                        // For example, you might upload the file to your server and return the URL
                        const formData = new FormData();
                        formData.append("image", file);

                        const response = await fetch("/upload-image", {
                            method: "POST",
                            body: formData,
                            headers: {
                                "X-CSRF-TOKEN": document
                                    .querySelector('meta[name="csrf-token"]')
                                    .getAttribute("content"),
                            },
                        });

                        const data = await response.json();
                        return {
                            success: 1,
                            file: {
                                url: data.url, // The URL of the uploaded image
                            },
                        };
                    },
                    async uploadByUrl(url) {
                        // This function is called when the user provides an image URL
                        // You can validate or process the URL here if necessary
                        return {
                            success: 1,
                            file: {
                                url: url, // The image URL
                            },
                        };
                    },
                },
            },
        },
    },
    
});

// Save Blog Post Data
document.getElementById("saveButton").addEventListener("click", async () => {
    const title = document.getElementById("title").value;
    const keywords = document.getElementById("keywords").value;
    const description = document.getElementById("description").value;

    // Save Editor.js content
    const content = await editor.save();

    // Send data to backend
    fetch("/save-blog-post", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            title,
            keywords,
            description,
            content,
        }),
    })
        .then((response) => response.json())
        .then((data) => alert("Blog post saved successfully!"))
        .catch((err) => console.error("Error saving blog post:", err));
});





