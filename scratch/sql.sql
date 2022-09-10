SELECT courses.name, documents.name FROM viva.courses, viva.documents, viva.course_documents 
where course_documents.course_id = courses.id and course_documents.document_id = documents.id;